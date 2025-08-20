// This file defines the data structure and methods related to user profiles.
// It exports constants and functions for profile data handling.

const profileModel = {
    userId: null,
    name: '',
    email: '',
    phone: '',
    address: '',
    medicalHistory: [],

    setProfile(userId, name, email, phone, address, medicalHistory) {
        this.userId = userId;
        this.name = name;
        this.email = email;
        this.phone = phone;
        this.address = address;
        this.medicalHistory = medicalHistory;
    },

    getProfile() {
        return {
            userId: this.userId,
            name: this.name,
            email: this.email,
            phone: this.phone,
            address: this.address,
            medicalHistory: this.medicalHistory,
        };
    },

    updateProfile(updatedData) {
        Object.assign(this, updatedData);
    },

    clearProfile() {
        this.userId = null;
        this.name = '';
        this.email = '';
        this.phone = '';
        this.address = '';
        this.medicalHistory = [];
    }
};

export default profileModel;