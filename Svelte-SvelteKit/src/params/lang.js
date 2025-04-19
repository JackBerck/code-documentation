export function match(lang) {
    const value = lang || 'id';

    return ["en", "id", "es", "fr"].includes(value);
}