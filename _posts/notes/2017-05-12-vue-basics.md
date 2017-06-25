---
layout: post
title: vue basics
excerpt_separator: <!--more-->
category: notes
comments: true
---
### Simple examples
[starting with Vuejs](http://codepen.io/hsolatges/post/starting-with-vuejs-2)

#### structure looks like this
```Vuejs
new Vue ({
  el: '#element',
  data:{
    data1:'',
    data2:''
  },
  methods: {
    method1: function(){

    }
  }
  })
```
### Vue components
#### components are custom elements, see( [official document](https://vuejs.org/v2/guide/components.html#Registration) ).

A basic format is like this:
``` Vuejs
Vue.component('my-component', {
  template: '<div>A custom component!</div>'
})
```
