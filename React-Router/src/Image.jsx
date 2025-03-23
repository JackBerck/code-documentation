import { useParams } from "react-router";

export default function Images() {
  const params = useParams();

  return (
    <div>
      <h1>Image</h1>
      <p>
        This is the Image page for {params["*"]}. Click on the links above to
        see the data for image.
      </p>
    </div>
  );
}
