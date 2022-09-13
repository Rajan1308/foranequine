import { useQuery } from '@apollo/client';
import { gql } from "apollo-boost";


const  OurExperts_QUERY = gql`{
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
`;

const OurExpertsPosts = () => {


  const { loading, error, data } = useQuery(OurExperts_QUERY);
  console.log('HEY');
  console.log(data);
  if (loading) return <p>Loading Posts...</p>;
  if (error) return <p>Something wrong happened!</p>;

  const posts = data.ourexperts.edges.node;
  console.log(posts);
  return posts.map((id, title) => {
    console.log('HELLE');
    return(
      <div key={id}>
      
        <h2>{ title }</h2>
      </div>
    )
  });
};

export default OurExpertsPosts;