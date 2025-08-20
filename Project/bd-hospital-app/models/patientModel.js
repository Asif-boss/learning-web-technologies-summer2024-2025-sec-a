const patientModel = {
    patients: [],

    registerPatient: function(patientData) {
        this.patients.push(patientData);
    },

    viewPatientDetails: function(patientId) {
        return this.patients.find(patient => patient.id === patientId);
    },

    updatePatientInfo: function(patientId, updatedData) {
        const index = this.patients.findIndex(patient => patient.id === patientId);
        if (index !== -1) {
            this.patients[index] = { ...this.patients[index], ...updatedData };
        }
    },

    getAllPatients: function() {
        return this.patients;
    }
};

export default patientModel;