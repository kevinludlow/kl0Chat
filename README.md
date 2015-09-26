# kl0Chat
kl0Chat is a trivial SQL chatting mechanism designed to circumvent corporate firewalls and other such chat-impeding mechanisms

# Description

Sometime around 2006 I was having a hrd time chatting with friends and family through Jabber-protocol chat clients.  Google Chat, AIM, and things of this nature were available to me, but I didn't like the idea of those companies having access to all of my chats.  I suppose that proved to be forward thinking, but I digress...

I wrote this very trivial SQL-based chat program so that I could run it on my own server and chat with friends and family.

It has no security, it has no accounts, it has no nothing.

It simply keeps an active connection to a SQL table and lets as many users as desired read and write from the table in a manner that is formatted similar to a group chat environment.

It's a pretty bad piece of code and perhaps one of these days I will at least bring it up to a modern spec.  It was written in an afternoon and now 10 years later I've put it in GitHub for preservation in case anyone has an interest.
