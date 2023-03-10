document.addEventListener("DOMContentLoaded", (event) => {

    /**
     * Ajax Content
     * Умеет работать с кнопкой "Показать еще", "Пагинацией" и фильтрами
     * По вопросам пиши @melentq
     *
     * @param {object} [config] Config
     *
     * @param {string} [config.containerSelector] Parent Wrapper
     * @param {string} [config.contentSelector] Ajax Content Selector
     * @param {string} [config.filterSelector] Filter Selector
     * @param {string} [config.paginationLinkSelector] Pagination Link Selector
     * @param {string} [config.loaderSelector] Loader Selector
     * @param {string} [config.loadingClass] Ajax Content Loading Class
     * @param {boolean} [config.appendContent] Append Content *
     * @param {string} [config.contentSelectorForAppend] Content Selector for Append *
     * @param {function} [config.onAfterUpdate] After Update Callback
     */
    (function ajaxContent(config) {
        const defaultConfig = {
            containerSelector: '.js-ajax-container',
            contentSelector: '.js-ajax-content',
            loadingClass: 'js-loading',
            filterSelector: '.js-ajax-filter',
            filterControlSelector: '.js-ajax-input',
            loaderSelector: '.js-ajax-loader',
            paginationLinkSelector: '.js-ajax-pagination-link',

            appendContent: true,
            contentSelectorForAppend: '.js-ajax-list',

            onAfterUpdate: () => {
            }
        }

        config = Object.assign(defaultConfig, config);

        const containers = document.querySelectorAll(config.containerSelector);
        containers.forEach((container, containerKey) => {
            const form = container.querySelector(config.filterSelector);
            const ajaxContent = container.querySelector(config.contentSelector);

            setEventListeners(container, form, ajaxContent, containerKey);

            setPagination(container, ajaxContent, containerKey);
        })

        function update(container, uri, ajaxContent, containerKey, initiator) {
            setLoading(container);

            fetch(uri)
                .then(res => res.text())
                .then(data => {
                    const parser = new DOMParser();
                    const newDocument = parser.parseFromString(data, "text/html");

                    setContent(newDocument, ajaxContent, containerKey, initiator);
                    setPagination(container, ajaxContent, containerKey);

                    config.onAfterUpdate();
                })
                .finally(() => {
                    removeLoading(container);
                })
        }

        function setLoading(container) {
            const loader = container.querySelector(config.loaderSelector);
            container.classList.add(config.loadingClass);

            loader && loader.classList.add('active');
        }

        function removeLoading(container) {
            const loader = container.querySelector(config.loaderSelector);
            container.classList.remove(config.loadingClass);
            loader && loader.classList.remove('active');
        }

        function setContent(newDocument, ajaxContent, containerKey, initiator) {
            const newContainers = newDocument.querySelectorAll(config.containerSelector);
            newContainers.forEach((newContainer, newContainerKey) => {
                if (newContainerKey === containerKey) {
                    const newAjaxContent = newContainer.querySelector(config.contentSelector);
                    if (config.appendContent && initiator === "pagination") {
                        const list = ajaxContent.querySelector(config.contentSelectorForAppend);
                        const newList = newAjaxContent.querySelector(config.contentSelectorForAppend);
                        newList.innerHTML = list.innerHTML + newList.innerHTML;
                    }

                    ajaxContent.innerHTML = newAjaxContent.innerHTML;
                }
            })
        }

        function setEventListeners(container, form, ajaxContent, containerKey) {
            if (form) {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();

                    // update(container, getUri(form), ajaxContent, containerKey);
                })
                form.addEventListener('reset', () => {
                    update(container, getUri(form), ajaxContent, containerKey);
                })

                const inputs = form.querySelectorAll(config.filterControlSelector);
                inputs.forEach(input => {
                    input.addEventListener('change', () => {
                        update(container, getUri(form), ajaxContent, containerKey);
                    })
                })
            }
        }

        function setPagination(container, ajaxContent, containerKey) {
            const links = container.querySelectorAll(config.paginationLinkSelector);

            links.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();

                    const linkUrl = link.href || link.dataset.url;

                    const uri = updateQueryStringParameter(linkUrl, "set_filter", "Y");
                    update(container, uri, ajaxContent, containerKey, "pagination");
                })
            })
        }

        // utils
        function getUri(form) {
            let uri = form.action;

            const formData = new FormData(form);
            for (const entry of formData.entries()) {
                uri = updateQueryStringParameter(uri, entry[0], entry[1]);
            }

            return uri;
        }

        function updateQueryStringParameter(uri, key, value) {
            const re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
            const separator = uri.indexOf('?') !== -1 ? "&" : "?";
            if (uri.match(re)) {
                return uri.replace(re, '$1' + key + "=" + value + '$2');
            }
            return uri + separator + key + "=" + value;
        }
    })({
        onAfterUpdate: () => {
            window.refreshLazy && window.refreshLazy();
        }
    })

    function initForms() {
        const forms = document.querySelectorAll('.js-form');
        forms.forEach(form => {
            const submitButtons = [...form.querySelectorAll('.js-form-submit')];

            form.addEventListener('submit', e => {
                e.preventDefault();

                submitButtons.forEach(button => {
                    button.setAttribute('disabled', true);
                });

                const formData = new FormData(form);
                const url = form.action;

                fetch(url, {
                    body: formData,
                    method: 'POST'
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            form.reset();
                            // alert(data.message);
                            openPopup('success')
                        } else {
                            // alert(data.errors.join('\n'));
                            openPopup('error')
                        }
                    })
                    .catch(err => {
                        console.error(err);
                    })
                    .finally(() => {
                        submitButtons.forEach(button => {
                            button.removeAttribute('disabled');
                        });
                    });
            });
        })
    }

    initForms();
});