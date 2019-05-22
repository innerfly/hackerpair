<template>
    <div>
        <h1>HackerPair Events ({{ events.total }})</h1>
        {{error}}
        <table class="table table-striped table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <event-item
                v-for="event in events.data"
                :event="event"
                :key="event.id">
            </event-item>
            </tbody>
        </table>

        <pagination :data="events"
            v-on:pagination-change-page="getEvents"></pagination>
    </div>
</template>

<script>
    import EventItem from './EventItem'

    export default {
        components: {
            'event-item': EventItem
        },
        data() {
            return {
                error: '',
                events: {}
            }
        },
        created() {
            this.getEvents()
        },
        methods: {
            getEvents(page) {
                if(typeof page === 'undefined'){
                    page = 1
                }
                axios.get('api/events_pagination?page=' + page)
                    .then(response => {
                        this.events = response.data
                    })
                    .catch(e => {
                        this.error = 'An error has occured'
                    })
            }
        }
    }
</script>