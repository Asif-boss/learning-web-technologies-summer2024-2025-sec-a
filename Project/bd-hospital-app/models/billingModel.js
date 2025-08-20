// This file defines the data structure and methods related to billing.
// It exports constants and functions for billing data handling.

const billingModel = {
    bills: [],
    
    generateBill: function(patientId, amount, date) {
        const bill = {
            id: this.bills.length + 1,
            patientId: patientId,
            amount: amount,
            date: date,
            status: 'unpaid'
        };
        this.bills.push(bill);
        return bill;
    },

    viewBillingHistory: function(patientId) {
        return this.bills.filter(bill => bill.patientId === patientId);
    },

    payBill: function(billId) {
        const bill = this.bills.find(b => b.id === billId);
        if (bill) {
            bill.status = 'paid';
            return bill;
        }
        return null;
    }
};

export default billingModel;