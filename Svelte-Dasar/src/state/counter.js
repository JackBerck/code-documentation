import { writable } from "svelte/store";

export const counter = writable(0);
counter.subscribe(() => console.log(counter));
