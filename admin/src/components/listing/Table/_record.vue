<template>
  <tr>
    <td>
      <h4>{{record.magictitle}}</h4>
      <p>{{record.magicexcerpt}}</p>
    </td>
    <td>meta</td>
    <td>image</td>
    <td>action</td>
  </tr>
</template>

<script>
  export default {
    name: 'listing-record',
    props: ["record"],
  }
</script>