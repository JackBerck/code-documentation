export default function Toolbar({ onClick }) {
  return (
    <div onClick={onClick}>
        <button type="button" onClick={onClick}>First</button>
        <button type="button" onClick={onClick}>Second</button>
    </div>
  );
}
