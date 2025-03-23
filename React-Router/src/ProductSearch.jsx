import { useNavigate, useSearchParams } from "react-router";
import { useState } from "react";

export default function ProductSearch() {
  const [searchParams] = useSearchParams();
  const [search, setSearch] = useState(searchParams.get("search") || "");
  const navigate = useNavigate();

  function handleSearch(e) {
    if (search) {
      e.preventDefault();
      navigate(`?search=${search}`);
    }
  }

  return (
    <div>
      <h1>Product Search</h1>
      <p>Search for a product in the search bar above.</p>
      <form onSubmit={handleSearch}>
        <input
          type="search"
          value={search}
          onChange={(event) => setSearch(event.target.value)}
        />
        <button type="submit">Search</button>
      </form>
      <p>You search {search ? ` for ${search}` : " with no search term"}.</p>
    </div>
  );
}
