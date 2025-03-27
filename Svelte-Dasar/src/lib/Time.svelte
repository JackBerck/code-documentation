<script>
  const time = (node, time) => {
    const text = node.textContent;

    $effect(() => {
      let interval = setInterval(() => {
        node.textContent = `${text} ${new Date().toLocaleTimeString()}`;
      }, time);

      return () => clearInterval(interval);
    });
  };
</script>

<h1 use:time={500}>Current time:</h1>

<p use:time={1000}>It is currently</p>
