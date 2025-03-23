import { useParams } from "react-router";

export default function NotFound() {
  const { "*": path } = useParams();
  
  return (
    <div>
      <h1>404 Not Found</h1>
      <p>Sorry, the page you are looking for does not exist: {path}</p>
    </div>
  );
}
