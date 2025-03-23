import Todo from "./Todo";

export default function TodoList({ todos }) {
  const data = [
    {
      text: "This is first todo",
      isCompleted: true,
    },
    {
      text: "This is second todo",
      isCompleted: false,
    },
    {
      text: "This is third todo",
      isCompleted: true,
    },
    {
      text: "This is fourth todo",
      isCompleted: false,
      isDeleted: true,
    },
  ];

  return (
    <ul>
      {data.map((todo, index) => (
        <Todo key={index} {...todo} />
      ))}
    </ul>
  );
}
