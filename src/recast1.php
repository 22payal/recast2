<?php

.then(recastaiRes => {
    const intent = recastaiRes.intent()

    if (intent && intent.slug === 'get-help') 
    {
      const reply = {
        type: 'quickReplies',
        content: {
          title: 'Hi :-)',
          buttons: [
            {
              title: 'balance',
              value: 'your balance is here',
            },
            {
              title: 'networth',
              value: 'your networth is here',
            },

            {
              title: 'transaction',
              value: 'your transaction is here',
            },
          ],
        },
      }

      return message ? message.reply([reply]) : res.json({ reply: 'Hi, what can I help you with? :-)' })
    }

    if (recastaiRes.entities.hasOwnProperty('category')) {
       //... some code
    }

?>