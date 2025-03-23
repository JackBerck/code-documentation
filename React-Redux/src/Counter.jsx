import { useSelector, useDispatch } from "react-redux";
import { increment, decrement, getDoubleCounter, getCounter } from "./counterSlice";

export default function Counter() {
  let count = useSelector((state) => state.counter);
  const doubleCount = useSelector(getDoubleCounter);
  const tripleCount = useSelector(state => getCounter(state, 3));
  const dispatch = useDispatch();

  function handleIncrement() {
    dispatch(increment());
  }

  function handleDecrement() {
    dispatch(decrement());
  }

  return (
    <div>
      <h1>Count: {count}</h1>
      <h1>Double Count: {doubleCount}</h1>
      <h1>Triple Count: {tripleCount}</h1>
      <button onClick={handleIncrement}>Increment</button>
      <button onClick={() => dispatch(increment(2))}>Increment + 2</button>
      <button onClick={handleDecrement}>Decrement</button>
      <button onClick={() => dispatch(decrement(2))}>Decrement - 2</button>
    </div>
  );
}
