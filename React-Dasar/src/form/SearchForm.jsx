export default function SearchForm() {
  const handleSubmit = (e) => {
    e.preventDefault();
    console.info("Form submitted");
  };
  return (
    <form onSubmit={handleSubmit}>
      <input type="text" />
      <button type="submit">Search</button>
    </form>
  );
}
