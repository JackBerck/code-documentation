import { NavLink, useLocation } from "react-router";
import { Outlet } from "react-router";
import "./data.css";

export default function DataLayout() {
  const location = useLocation();

  return (
    <div>
      <div>
        <h1>This is Header</h1>
      </div>
      <div>
        <ul>
          <li>
            <NavLink to="/data/products">Products</NavLink>
          </li>
          <li>
            <NavLink to="/data/sellers">Sellers</NavLink>
          </li>
          <li>
            <NavLink to="/data/customers">Customers</NavLink>
          </li>
          <li>
            <NavLink
              to={{
                pathname: "/data/products/",
                search: "?category=electronics",
                hash: "#top",
              }}
            >
              Product Electronics
            </NavLink>
          </li>
        </ul>
      </div>
      <div>
        <Outlet />
      </div>
      <div>
        <p>This is Footer</p>
        <p>
          Location:
          {location.pathname}
          {location.search}
          {location.hash}
        </p>
      </div>
    </div>
  );
}
