import "./Container.css";

export default function Container({children}) {
  return (
    <div>
      <h1>Container</h1>
      {children}
      <footer>
        <p className="exception">Footer</p>
      </footer>
    </div>
  );
}
