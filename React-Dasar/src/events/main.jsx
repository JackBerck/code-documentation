import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import AllertButton from "../button/AllertButton";
import MyButton from "../button/MyButton";
import Toolbar from "../button/Toolbar";
import SearchForm from "../form/SearchForm";

createRoot(document.getElementById("root")).render(
  <StrictMode>
    <AllertButton text="This is a event handler" />
    <MyButton
      text="This is a event handler"
      onSmash={() => alert("You smash me")}
    />
    <Toolbar
      onClick={(e) => {
        e.stopPropagation();
        console.info(e.target);
      }}
    />
    <SearchForm />
  </StrictMode>
);
