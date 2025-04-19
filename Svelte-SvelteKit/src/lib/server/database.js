import { DB_HOST, DB_PORT } from "$env/static/private";

export function connect() {
    console.info(`Connecting to database: ${DB_HOST} ${DB_PORT}`);
}