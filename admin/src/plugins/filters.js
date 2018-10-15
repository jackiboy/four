/* eslint-disable */

import Vue from 'vue'
import moment from 'moment'

Vue.filter('date', string =>{
  if (string) {
    return moment(String(string)).add(1,'days').format('MMMM DD, YYYY')
  }
});

Vue.filter('datetime', string =>{
  if (string) {
    return moment(String(string)).add(1,'days').format('MMMM Do YYYY, h:mm:ss a')
  }
});

Vue.filter('anchor', string => {
  if (string) {
   return "#" + string.toString().toLowerCase()
    .replace(/\s+/g, '-')          
    .replace(/[^\w\-]+/g, '')       
    .replace(/\-\-+/g, '-')         
    .replace(/^-+/, '')
    .replace(/-+$/, '');
  }
})

Vue.filter('slugify', string => {
  if (string) {
   return string.toString().toLowerCase()
    .replace(/\s+/g, '-')          
    .replace(/[^\w\-]+/g, '')       
    .replace(/\-\-+/g, '-')         
    .replace(/^-+/, '')
    .replace(/-+$/, '');
  }
})