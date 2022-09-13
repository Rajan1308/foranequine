import React from "react"
// import { Query } from 'react-apollo'
import { Query } from '@apollo/react-hooks'
import gql from "graphql-tag"



const OurExperts = () => (
  <Query query={
    gql`
    
    {
      ourexperts {
        edges {
          node {
            id
            title
           slug
          }
        }
      }
    }
    
    `
  }>
    {
      ({loading, error, data}) => {
        if(loading) {
          return(<h1>Loading...</h1>);
        }
        // console.log(data);
        return(
          <div>
            {
              data.ourexperts.edges.map((ourexpert, key) => {
                return(
                  <div key={key}>
                  
                    <h2>{ourexpert.node.title}</h2>
                  </div>
                )
              })
            }
          </div>
        )
      }
    }

  </Query>
)


export default OurExperts;