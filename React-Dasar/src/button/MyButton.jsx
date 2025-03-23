export default function MyButton({ text, onSmash }) {
  return <button onClick={onSmash}>{text}</button>;
}
