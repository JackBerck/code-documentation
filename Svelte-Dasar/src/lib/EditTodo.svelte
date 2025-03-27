<script>
  let { id, name, onedit } = $props();

  function save() {
    onedit(id, name);
  }
</script>

<td>
  {id} - <input type="text" {id} bind:value={name} />
  <button onclick={save} class="btn">Save</button>
</td>

<style>
    .btn {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>