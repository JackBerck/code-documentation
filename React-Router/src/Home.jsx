import { useNavigate } from "react-router";

export default function Home() {
  const navigate = useNavigate();

  function handleClick() {
    navigate({
      pathname: "/data",
    });
  }

  return (
    <div>
      <h1>Home</h1>
      <p>Welcome to the Home page!</p>
      <button type="button" onClick={handleClick}>To Data</button>
    </div>
  );
}
