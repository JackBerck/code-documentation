<script>
  let fullName = $state({
    firstName: "",
    lastName: "",
  });
</script>

<input type="text" bind:value={fullName.firstName} placeholder="First Name" />
<input type="text" bind:value={fullName.lastName} placeholder="Last Name" />

<h1>Hello {fullName.firstName} {fullName.lastName}</h1>
