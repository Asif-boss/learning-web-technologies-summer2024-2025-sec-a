const notificationModel = {
    notifications: [],

    addNotification: function(notification) {
        this.notifications.push(notification);
    },

    getNotifications: function() {
        return this.notifications;
    },

    clearNotifications: function() {
        this.notifications = [];
    },

    getNotificationCount: function() {
        return this.notifications.length;
    }
};

export default notificationModel;