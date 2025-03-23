import { useParams } from "react-router";

export default function ProductDetail() {
  const { id } = useParams();

  return (
    <div>
      <h1>Product Detail</h1>
      <p>
        This is the Product Detail page for id {id}. Click on the links above to
        see the data for product.
      </p>
    </div>
  );
}
