import Row from "./Row";

export default function Table() {
  return (
    <table border={1}>
      <thead>
        <tr>
          <th>Counter</th>
          <th>Text</th>
        </tr>
      </thead>
      <tbody>
        <Row id={1} text="This is first row" />
        <Row id={2} text="This is second row" />
        <Row id={3} text="This is third row" />
        <Row id={4} text="This is fourth row" />
      </tbody>
    </table>
  );
}
