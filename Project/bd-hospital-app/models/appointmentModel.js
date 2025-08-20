const appointmentModel = {
    appointments: [],

    addAppointment: function(appointment) {
        this.appointments.push(appointment);
    },

    getAppointments: function() {
        return this.appointments;
    },

    cancelAppointment: function(appointmentId) {
        this.appointments = this.appointments.filter(appointment => appointment.id !== appointmentId);
    },

    findAppointment: function(appointmentId) {
        return this.appointments.find(appointment => appointment.id === appointmentId);
    }
};

export default appointmentModel;