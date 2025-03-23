function HeaderHelloWorld({text = 'Hello World'}) {
  return <h1 style={{ 
    color: 'red', 
    fontSize: '50px'
   }}>{text.toUpperCase()}</h1>;
}

function ParagraphHelloWorld({text = 'This is a simple component'}) {
  const style = {
    color: 'blue',
    fontSize: '20px'
  }
  return <p style={style}>{text.toLowerCase()}</p>;
}

export default function HelloWorld() {
  const props = {
    text: 'This is a simple component with props passed but in spread operator'
  }
  
  return (
    <div>
      <HeaderHelloWorld text="This is a Hello World"/>
      <ParagraphHelloWorld {...props} />
    </div>
  );
}
