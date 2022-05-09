---
layout: 'layouts/project'
name: 'MoodJar: Cognitive Behavioural Therapy app'
image_slug: moodjar
role: Website Developer and Android Developer
summary: Application development exploring the use of secure technology to enhance communication between health professionals and patients within the health industry.
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
  node:
    id: node
    text: NodeJS
  postgresql:
    id: postgresql
    text: PostgreSQL
  java:
    id: java
    text: Java
  canvasjs:
    id: canvasjs
    text: CanvasJS
  android:
    id: android
    text: Android Fingerprint API
  encryption:
    id: encryption
    text: Encryption (AES-GCM)
tags:
  - projects
start_date: 2017-09-01
end_date: 2018-06-01
---

# Project: {{ name }}

<strong>{{ role }}</strong>

A secure android and web application, demonstrating how current technology could be used to increase and improve communications between patients and healthcare professionals, specifically in the area of mental health and cognitive behavioural therapy. Users would be signed up for an account by their healthcare professional and could use the android app to enter into their mood diary. This information was securely stored in an encrypted database and could be viewed only by that patient's doctor/therapist via the web admin interface.

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image" src="/assets/project-images/moodjar.png" alt="" role="presentation">
</div>
