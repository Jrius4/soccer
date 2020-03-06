import React from 'react'

const Trails = () => {
    const elements = [
        {pet:"dog",food:"bone"},
        {pet:"cat",food:"rats"},
        {pet:"dog",food:"chicken"},
        {pet:"fish",food:"water"},
        {pet:"cat",food:"fish"},
    ]


    return (
        <div>
            {console.log(elements.groupBy(pet))}
        </div>
    )
}

export default Trails
