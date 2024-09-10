export default {
    popupId: "",
    getters: {
        fetchBody: () => document.querySelector("body"),
        hasPopupOnLandingPage: () => !!(window.app.popupId?.trim()),
    },
    methods: {
        toggleLandingPopup: id => {
            if (window.app.active.getters.hasPopupOnLandingPage()) {
                window.app.active.methods.closeMountedPopup()
            } else {
                window.app.active.popupId = id;
                const body = window.app.active.getters.fetchBody();
                const popup = document.getElementById(window.app.active.popupId);
                body.setAttribute("data-overflow", "false")
                popup.setAttribute("data-visible", "true");
                popup.addEventListener('click', window.app.active.methods.handleClosePopupModalEvent)
            }
        },
        closeMountedPopup: () => {
            const body = window.app.active.getters.fetchBody();
            const popup = document.getElementById(window.app.active.popupId);

            body.setAttribute("data-overflow", "true");
            popup.setAttribute("data-visible", "false");

            window.app.active.popupId = "";
            popup.removeEventListener('click', window.app.active.methods.handleClosePopupModalEvent)
        },
        handleClosePopupModalEvent: (event) => {
            // if it has an id, and it is the same as the mounted popup, close the modal
            if (event.target.id && event.target.id === window.app.active.popupId) {
                window.app.active.methods.closeMountedPopup();
            }
        }
    }
}
