import { createSlice } from "@reduxjs/toolkit";

export const counterSlice = createSlice({
  name: "counter",
  initialState: 0,
  reducers: {
    increment: (state, action) => {
      if (action.payload) {
        return state + action.payload;
      } else {
        return state + 1;
      }
    },
    decrement: (state, action) => {
      if (action.payload) {
        return state - action.payload;
      } else {
        return state - 1;
      }
    },
  },
  selectors: {
    getDoubleCounter: (state) => state * 2,
    getCounter: (state, value) => {
      if(value) {
        return state * value;
      } else {
        return state;
      }
    }
  },
});

export const { increment, decrement } = counterSlice.actions;
export const { getDoubleCounter, getCounter } = counterSlice.selectors;
