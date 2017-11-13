import {ADD_REMINDER } from '../constants';
import {DELETE_REMINDER } from '../constants';


export const addReminder = (text) => {
    const action = {
        type: ADD_REMINDER, 
        text: text
    }
    console.log(action);
    return action;
}

export const deleteReminder = (id) => {
    const action = {
        type: DELETE_REMINDER, 
        id: id
    }

    return action;
}