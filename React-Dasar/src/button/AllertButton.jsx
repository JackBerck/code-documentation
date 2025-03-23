export default function AllertButton({ text }) {
  const handleClick = (e) => {
    console.info(e.target);
    alert(text);
  };
  return <button onClick={handleClick}>Click me</button>;
}
