package fred.portfolio.data.repositories;

import fred.portfolio.data.entities.Event;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface EventRepository extends CrudRepository<Event, Long> {
    List<Event> findAllByTitleLike(String title);
}
