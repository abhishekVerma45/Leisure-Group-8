import buttonClicked from './payment.js';

let trialAccount = document.getElementById('trial_account');
let isTrialPlanShowing = false;

let standardAccount = document.getElementById('standard_account');
let isStandardPlanShowing = false;

let premiumAccount = document.getElementById('premium_account');
let isPremiumPlanShowing = false;

if(buttonClicked==1){
    if(isTrialPlanShowing==false){
        trialAccount.style.display = 'block';
        isTrialPlanShowing = true;
    }
    else{
        trialAccount.style.display = 'none';
        isTrialPlanShowing = false;
    }
}
else if (buttonClicked == 2){
    if(isStandardPlanShowing==false){
        standardAccount.style.display = 'block';
        isStandardPlanShowing = true;
    }
    else{
        standardAccount.style.display = 'none';
        isStandardPlanShowing = false;
    }
}
else{
    if(isPremiumPlanShowing == false){
        premiumAccount.style.display = 'block';
        isPremiumPlanShowing = true;

    }
    else{
        premiumAccount.style.display = 'none';
        isPremiumPlanShowing = false;
    }
}

