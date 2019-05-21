<template>
    <tr>
        <td>
            {{ event.name }}
        </td>
        <td>
            {{ event.city }}
        </td>
        <td>
            <button class="btn btn-danger">Not Attending</button>
        </td>
    </tr>
</template>

<script>
    export default {
        props: {
            event: Object
        }
    }
</script>