<script>
  class Box {
    width = $state(100);
    height = $state(100);
    area = $derived(this.height * this.width);
  }

  const box = new Box();
</script>

<div>
  Width: <input
    type="range"
    min="0"
    max="500"
    name="width"
    id="width"
    bind:value={box.width}
  />
  <br />
  Height:
  <input
    type="range"
    min="0"
    max="500"
    name="height"
    id="height"
    bind:value={box.height}
  />
</div>

<div style:width={`${box.width}px`} style:height={`${box.height}px`} style:background="blue">
  {box.area}
</div>
