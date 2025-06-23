package fred.portfolio.data.repositories;

import fred.portfolio.data.entities.Tech;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import java.util.List;
import java.util.Optional;

@Repository
public interface TechRepository extends CrudRepository<Tech, Long> {
    Optional<Tech> findByName(String name);
    List<Tech> findAllByOrderByNameAsc();
    List<Tech> findAllByOrderByIdAsc();
}
