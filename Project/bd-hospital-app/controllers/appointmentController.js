const appointmentController = (() => {
    const appointments = [];

    const scheduleAppointment = (appointment) => {
        appointments.push(appointment);
        console.log("Appointment scheduled:", appointment);
    };

    const viewAppointments = () => {
        return appointments;
    };

    const cancelAppointment = (appointmentId) => {
        const index = appointments.findIndex(app => app.id === appointmentId);
        if (index !== -1) {
            appointments.splice(index, 1);
            console.log("Appointment canceled:", appointmentId);
        } else {
            console.log("Appointment not found:", appointmentId);
        }
    };

    return {
        scheduleAppointment,
        viewAppointments,
        cancelAppointment
    };
})();

export default appointmentController;