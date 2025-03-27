<script>
  import UserRow from "./lib/UserRow.svelte";

  const users = [
    { id: 1, name: "John Doe", address: "123 Main St" },
    { id: 2, name: "Jane Doe", address: "456 Elm St" },
    { id: 3, name: "Jim Doe", address: "789 Oak St" }
  ];
</script>

<h1>User App</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Address</th>
    </tr>
  </thead>
  <tbody>
    {#each users as user (user.id)}
      <UserRow {...user} />
    {/each}
  </tbody>
</table>
