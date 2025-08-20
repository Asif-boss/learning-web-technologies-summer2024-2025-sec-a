const insuranceModel = {
    claims: [],
    
    addClaim: function(claim) {
        this.claims.push(claim);
    },
    
    viewClaims: function() {
        return this.claims;
    },
    
    submitClaim: function(claimDetails) {
        // Logic to submit a claim
        this.addClaim(claimDetails);
    },
    
    getClaimById: function(claimId) {
        return this.claims.find(claim => claim.id === claimId);
    }
};

export default insuranceModel;