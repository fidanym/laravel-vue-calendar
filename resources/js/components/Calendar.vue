<template>
  <v-content>
    <v-container>
      <event-modal ref="modal"/>
      <v-sheet height="500">
        <v-skeleton-loader
            v-if="!events.length"
            class="mx-auto"
            type="table"
        ></v-skeleton-loader>
        <v-calendar
            v-if="events.length"
            type="month"
            now="2019-11-02"
            value="2019-11-02"
            @click:event="showEvent"
            :events="events"
        ></v-calendar>
      </v-sheet>
    </v-container>
  </v-content>
</template>

<script>

  import EventDetailsModal from "./Modals/EventDetailsModal";

  export default {
    name: "Calendar",
    components: {
      eventModal: EventDetailsModal
    },
    data: () => ({
      events: [],
    }),
    methods: {
      getEvents() {
        let self = this;
        axios.get('/api/events')
            .then(response => {
              self.events = response.data;
              console.log({events: response.data})
            })
            .catch(e => {
              console.log(e)
            })
      },
      showEvent({event}) {
        this.$refs.modal.open(event)
      }
    },
    created() {
      this.getEvents();
    }
  }
</script>

<style scoped>

</style>
