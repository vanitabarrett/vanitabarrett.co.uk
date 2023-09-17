---
layout: 'layouts/project'
name: List Management
role: Owner, Designer and Developer
summary: Design and build of a web application to track progress against various collections of list data.
skills:
  html:
    id: html5
    text: HTML5
  css:
    id: css3
    text: CSS3
  sass:
    id: sass
    text: Sass
  javascript:
    id: javascript
    text: JavaScript
  node:
    id: node
    text: Node.js
  mysql:
    id: mysql
    text: MySQL
  chartjs:
    id: chartjs
    text: ChartJS
  ejs:
    id: ejs
    text: EJS
tags:
  - projects
start_date: 2018-01-01
end_date: 2020-01-01
---

# Project: {{ name }}

<strong>{{ role }}</strong>

The site uses a populated database of all 1001 books, UNESCO world heritage sites and countries, as well as providing the option for user-specified additions. A user can mark an item as 'Wishlist', 'Not Started', 'In Progress' or 'Completed'. The application has been built in an expandable way, using EJS components and generalised logic so adding a new list is relatively simple.

In 2022 I added an integration with the <a href="https://whc.unesco.org/en/list/xml">Unesco API</a> to pull the latest data and add sites to the database if they didn't already exist. This means the list can be brought up to date with the current list of Unesco sites with the click of a button.

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image project-image--multiple" src="/assets/project-images/books.png" alt="" role="presentation">
  <img class="project-image project-image--multiple" src="/assets/project-images/books2.png" alt="" role="presentation">
</div>
