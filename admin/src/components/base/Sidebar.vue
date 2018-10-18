<template>
  <aside class="admin__sidebar">
    <router-link class="admin__sidebar--brand" to="/">
      <img src="../../static/logo.svg" />
    </router-link> 
    <div class="admin__sidebar--content">
      <ul class="admin__sidebar--menu">
        <li>
          <div class="btn-group dropright btn-block">
            <router-link class="btn btn-white" to="/content/pages">
              <i class="fa fa-file"></i>pages
            </router-link>
            <button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropright</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#"><i class="fa fa-eye"></i>View Pages</a>
              <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>New Page</a>
            </div>
          </div>
        </li>
        <li>
          <div class="btn-group dropright btn-block">
            <router-link class="btn btn-white" to="/content/entries">
              <i class="fa fa-file-text"></i>entries
            </router-link>
            <button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropright</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#"><i class="fa fa-eye"></i>View Entries</a>
              <a class="dropdown-item" href="#"><i class="fa fa-plus"></i>New Entry</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </aside>
</template>

<script>

export default {
  name: 'admin-sidebar',
}
</script>
