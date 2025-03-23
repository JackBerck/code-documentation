import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import { BrowserRouter, Routes, Route } from "react-router";
import Home from "./Home";
import Images from "./Image";
import About from "./About";
import Data from "./Data";
import Product from "./Product";
import Seller from "./Seller";
import Customer from "./Customer";
import DataLayout from "./DataLayout";
import ProductDetail from "./ProductDetail";
import NotFound from "./NotFound";
import ProductSearch from "./ProductSearch";

createRoot(document.getElementById("root")).render(
  <StrictMode>
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/images/*" element={<Images />} />
        <Route path="/about" element={<About />} />
        <Route path="/data" element={<DataLayout />}>
          <Route index element={<Data />} />
          <Route path="products" element={<Product />} />
          <Route path="products/search" element={<ProductSearch />} />
          <Route path="products/:id" element={<ProductDetail />} />
          <Route path="sellers" element={<Seller />} />
          <Route path="customers" element={<Customer />} />
        </Route>
          <Route path="/*" element={<NotFound />} />
      </Routes>
    </BrowserRouter>
  </StrictMode>
);
