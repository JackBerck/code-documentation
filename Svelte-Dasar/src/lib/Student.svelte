<script>
  import { SvelteMap } from "svelte/reactivity";

  const students = new SvelteMap();

  let student = $state("");
  let value = $state(0);

  function addStudent() {
    students.set(student, value);
    student = "";
    value = 0;
  }
</script>

<h1>Students</h1>

<input bind:value={student} placeholder="Student name" />
<input type="number" bind:value placeholder="Grade" />
<button onclick={addStudent}>Add student</button>

<ul>
  {#each students as [name, grade]}
    <li>{name}: {grade}</li>
  {/each}
</ul>
